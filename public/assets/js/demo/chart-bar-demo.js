
Highcharts.chart('chart', {
    chart: {
        type: 'column',
        backgroundColor: null,
        style: {
            fontFamily: 'Inter, sans-serif'  
        }
    },

    title: {
        text: '',
        align: 'left'
    },
    credits: {
        enabled: false  
    },

    xAxis: {
        categories: ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan', '8 Jan', '9 Jan', '10 Jan', '11 Jan', '12 Jan', '13 Jan', '14 Jan', '15 Jan', '16 Jan', '17 Jan', '18 Jan', '19 Jan'],
        labels: {
            style: {
                color: '#858699'  
            }
        },
        gridLineWidth: 0,  
       
    },

    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: ''
        },
        labels: {
            style: {
                color: '#858699'  
            },
        },
        gridLineWidth: 0.3,  
        gridLineColor: '#858699', 
         gridLineDashStyle: 'Dash',
         gridLineDashType: 'solid'
       
    },

    tooltip: {
        shared: true,
        useHTML: true,
        backgroundColor: '#26273B',
        borderRadius: 4,
        padding: 16,
        shadow: false, 
        formatter: function() {
            let tooltip = `<b style="display:flex;justify-content:space-between"> 
            <span style="font-size:15px;font-weight:600;color:#F8F8F8">MRR Breakdown</span>
            <span style="color: #D2D3E0;font-size:11px;font-weight:500">${this.x}</span>
            </b><br/>`;

            let total = 0;

            this.points.forEach(function(point) {
                total += point.y;
                tooltip += `<span style='display:flex;justify-content:space-between;width:298px;padding-bottom:12px;font-size:12px;font-weight:500;color:#F8F8F8'>
                <span><span style='color:${point.series.color}'>&#8226;</span> ${point.series.name}</span>               
                <span>$${point.y}</span>
                </span>`;
            });

            tooltip += `<span style='display:flex;justify-content:space-between;width:298px;padding-top:12px;font-size:14px;font-weight:600;color:#FFFFFF;border-top: 1px solid #E0E1EC;'>
            <span>NET MRR</span>
            <span>$${total}</span>
            </span>`;

            return tooltip;
        }
    },

    plotOptions: {
        column: {
            stacking: 'normal',
            borderWidth: 0,
            borderRadius: 0
        }
    },

    legend: {
        layout: 'horizontal', 
        align: 'right',       
        verticalAlign: 'top', 
        x: 0,                 
        y: 1,                 
        itemDistance: 26,     
        symbolWidth: 4,       
        symbolHeight: 8,      
        symbolRadius: 100,    
        itemStyle: {
            fontSize: '12px',
            fontWeight: '500',
            color: '#E0E1EC'
        }
    },

    series: [{
        name: 'Churn',
        data: [6000, 6500, 7000, 7500, 7650, 7700, 7800, 7950, 8000, 8500, 8700, 9000, 9500, 10000, 10500, 11000, 11500, 12000, 12500],
        color: '#F24A4A'
    }, {
        name: 'Downgrades',
        data: [4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300, 5400, 5500, 5600, 5700, 5800, 5900, 6000, 6100, 6200, 6300, 6400],
        color: '#8987FD'
    }, {
        name: 'Existing',
        data: [4000, 4100, 4200, 4300, 4400, 4500, 4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300, 5400, 5500, 5600, 5700, 5800],
        color: '#75FF93'
    }, {
        name: 'Reactivations',
        data: [3500, 3600, 3700, 3800, 3900, 4000, 4100, 4200, 4300, 4400, 4500, 4600, 4700, 4800, 4900, 5000, 5100, 5200, 5300],
        color: '#5B68F1'
    }, {
        name: 'Upgrades',
        data: [1500, 1540, 1600, 1700, 1740, 1800, 1840, 1900, 2000, 2100, 2200, 2300, 2400, 2500, 2600, 2700, 2800, 2900, 3000],
        color: '#BB87FC'
    }, {
        name: 'New MRR',
        data: [700, 700, 700, 700, 700, 800, 900, 1000, 1000, 1000, 1075, 1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900],
        color: '#FF64D4'
    }]
});
