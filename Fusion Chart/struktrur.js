    $scope.myDataSource = 
    {
            "chart": {
                "caption": "Split of Sales by Product Category",
                "yAxisname": "Sales (In USD)",
                "paletteColors": "#0075c2,#1aaf5d",
                "bgColor": "#ffffff",
                "legendBorderAlpha": "0",
                "legendBgAlpha": "0",
                "legendShadow": "0",
                "placevaluesInside": "1",
                "valueFontColor": "#ffffff",                
                "alignCaptionWithCanvas": "1",
                "showHoverEffect":"1",
                "canvasBgColor": "#ffffff",
                "captionFontSize": "14",
                "subcaptionFontSize": "14",
                "subcaptionFontBold": "0",
                "divlineColor": "#999999",
                "divLineIsDashed": "1",
                "divLineDashLen": "1",
                "divLineGapLen": "1",
                "showAlternateHGridColor": "0",
                "toolTipColor": "#ffffff",
                "toolTipBorderThickness": "0",
                "toolTipBgColor": "#000000",
                "toolTipBgAlpha": "80",
                "toolTipBorderRadius": "2",
                "toolTipPadding": "5"
            },            
            "categories": [
                {
                    "category": [
                        {
                            "label": "Polo Lauren"
                        }, 
                        {
                            "label": "Gucci"
                        }, 
                        {
                            "label": "Dolce Gabbana"
                        }, 
                        {
                            "label": "Adidas"
                        }, 
                        {
                            "label": "Nike"
                        },
                        {
                            "label": "Pacalolo"
                        }
                    ]
                }
            ],           
            "dataset": [
                {
                    "seriesname": "2 Day Ago",
                    "data": [
                        {
                            "value": "12000"
                        }, 
                        {
                            "value": "15000"
                        }, 
                        {
                            "value": "10000"
                        }, 
                        {
                            "value": "11000"
                        }, 
                        {
                            "value": "15000"
                        }
                    ]
                },
                {
                    "seriesname": "Yesterday",
                    "data": [
                        {
                            "value": "17000"
                        }, 
                        {
                            "value": "19500"
                        }, 
                        {
                            "value": "12500"
                        }, 
                        {
                            "value": "14500"
                        }, 
                        {
                            "value": "17500"
                        }
                    ]
                }, 
                {
                    "seriesname": "Today",
                    "data": [
                        {
                            "value": "25400"
                        }, 
                        {
                            "value": "29800"
                        }, 
                        {
                            "value": "21800"
                        }, 
                        {
                            "value": "19500"
                        }, 
                        {
                            "value": "11500"
                        }
                    ]
                }   
            ]
        };

        // http://stackoverflow.com/questions/31265413/how-to-use-the-http-get-method-in-angular-to-fetch-the-json-data
        // http://plnkr.co/edit/twJIIwT7NfxHUaNQPZQq?p=preview
        FusionCharts.ready(function() 
        {
          var conversionChart1 = new FusionCharts(
          {
            type: 'mscolumn3d',
            renderAt: 'chart-container1',
            width: "100%",
            dataFormat: 'json',
            dataSource: $scope.myDataSource
          });

          conversionChart1.render();
        });