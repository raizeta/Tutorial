/**
 * Lists all regionalPropinsi entities.
 *
 */
public function indexAction(Request $request)
{
    $em = $this->getDoctrine()->getManager();
    $regionalPropinsis = $em->getRepository('EntitasBundle:RegionalPropinsi')->findAll();
    $page       = $request->query->getInt('page', 1);
    $limit      = $request->query->getInt('limit', 10);
    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate($regionalPropinsis,$page,$limit);

    $propinsiform = new Regionalpropinsi();
    $form = $this->createForm('EntitasBundle\Form\RegionalPropinsiType', $propinsiform);

    return $this->render
    (   'regionalpropinsi/index.html.twig',
        [
            'regionalPropinsis' => $pagination,
            'form' => $form->createView(),
            'limit'=>$limit
        ]
    );
}

{% extends 'base.html.twig' %}

{% block body %}
    {% if (regionalPropinsis |length != 0) %}
      {% set currentpage      = regionalPropinsis.currentPageNumber %}
      {% set itemperpage      = regionalPropinsis.getItemNumberPerPage %}
      {% set totalitem        = regionalPropinsis.getTotalItemCount %}
      {% set itemfirst        = regionalPropinsis.getPaginationData.firstItemNumber %}
      {% set itemlast         = regionalPropinsis.getPaginationData.lastItemNumber %}
    {% endif %}
    <button type="button" class="btn btn-outline-secondary btn-sm" style="margin-bottom:10px;float:right">
      Show Item  {{itemfirst}}-{{itemlast}} From {{totalitem}}
    </button>
    <button type="button" class="btn btn-outline-secondary btn-sm" style="margin-bottom:10px;float:right;margin-right:10px;">
        Limit:
        <select id="dynamic_select" style="border:0px;">
          <option value="{{path('regionalpropinsi_index',{'limit':5})}}" {% if limit == 5 %}selected{%endif %}>5</option>
          <option value="{{path('regionalpropinsi_index',{'limit':10})}}" {% if limit == 10 %}selected{%endif %}>10</option>
          <option value="{{path('regionalpropinsi_index',{'limit':20})}}" {% if limit == 20 %}selected{%endif %}>20</option>
          <option value="{{path('regionalpropinsi_index',{'limit':50})}}" {% if limit == 50 %}selected{%endif %}>50</option>
          <option value="{{path('regionalpropinsi_index',{'limit':100})}}" {% if limit == 100 %}selected{%endif %}>100</option>
        </select>
    </button>
    <table class="table table-striped table-dark table-bordered table-hover table-sm" id="tabledata">
        <tbody>
        {% for regionalPropinsi in regionalPropinsis %}
            <tr>
                <td align="center">
                    <a href="#">
                        {{ regionalPropinsis.getPaginationData.firstItemNumber + loop.index - 1 }} 
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class="row align-items-center justify-content-center">
        <div class="navigation">{{ knp_pagination_render(regionalPropinsis) }}</div>
    </div>

{% endblock %}

{% block javascripts %}
{{parent()}}
<script>
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location.href = url; // redirect
          }
          return false;
      });

</script>
{% endblock %}
