<?php
<tbody>
  {{dump(entities)}}
  {% for entities in entities %}
  <tr>
    {% for key,value in entities %}
    <td>
      {% if value.timezone is defined and value.nonExistingProperty is not defined %}
        {{dump(value|date)}}
      {% elseif value is iterable%}
        {% for key,value in value %}
          {{dump(value)}}
        {% endfor %}
      {% else %}
        {{dump(value)}}
      {% endif %}
    </td>
    {% endfor %}
  </tr>
  {% endfor %}
</tbody>