var customers = [ 
                {KD_CUST:'CUST-01',NM_CUST:'CUST SATU'},
                {KD_CUST:'CUST-02',NM_CUST:'CUST DUA'}
              ];

var productdas = [ 
                {KD_BARANG:'C001',NM_BARANG:'BARANG SATU'},
                {KD_BARANG:'C002',NM_BARANG:'BARANG DUA'},
                {KD_BARANG:'C003',NM_BARANG:'BARANG TIGA'},
                {KD_BARANG:'C004',NM_BARANG:'BARANG EMPAT'},
                {KD_BARANG:'C005',NM_BARANG:'BARANG LIMA'}
              ];

var typepenjualan   = [ 
                {KD_TYPE:'T1',DIALOG_TITLE:'INVENTORY_SELLIN',QTY:0},
                {KD_TYPE:'T2',DIALOG_TITLE:'INVENTORY_SELLOUT',QTY:0},
                {KD_TYPE:'T3',DIALOG_TITLE:'INVENTORY_REQUEST',QTY:0},
                {KD_TYPE:'T4',DIALOG_TITLE:'INVENTORY_STOCK',QTY:0},
                {KD_TYPE:'T5',DIALOG_TITLE:'INVENTORY_RETURN',QTY:0}
              ];

#Cara Pertama
    var combination = [];
    for( var k = 0; k < customers.length; k++)
    {
        var  customer = {};
        customer.KD_CUST            = customers[k].KD_CUST;
        customer.NM_CUST            = customers[k].NM_CUST;
        customer.products           = [];
        for(var i=0;i < productdas.length ; i ++)
        {
            var product = {};
            product.KD_BARANG            = productdas[i].KD_BARANG;
            product.NM_BARANG            = productdas[i].NM_BARANG;
            
            product.penjualan = [];
            for(var j=0;j < typepenjualan.length ; j ++)
            {
                var detail = {};
                detail.KD_TYPE              = typepenjualan[j].KD_TYPE;
                detail.DIALOG_TITLE              = typepenjualan[j].DIALOG_TITLE;
                detail.QTY                  = 0;
                product.penjualan.push(detail);
            }
            customer.products.push(product);
        }
        combination.push(customer);
    }
console.log(combination);

#Cara Kedua Dengan Mengakses Parent Dari Array
    angular.forEach(customers, function(value,key)
    {
        angular.forEach(productdas, function(value,key)
        {
            value.penjualan = typepenjualan;
        });
        value.products = productdas;
    });
console.log(customers)