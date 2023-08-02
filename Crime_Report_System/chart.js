const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Andhra Pradesh', 'Arunachal Pradesh', 'Assam',
                    'Bihar', 'Chhattisgarh', 'Goa','Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur',  'Meghalaya', 'Mizoram', 'Nagaland',  'Odisha', 'Punjab', 'Rajasthan',  'Sikkim', 'Tamil Nadu',  'Telangana', 'Tripura', 'Uttar Pradesh	',  'Uttarakhand', 'West Bengal	'],
        datasets: [{
            label: 'Crime Rate (IPC & SLL)',
            data: [452.7, 164.5, 349.5, 211.3, 352.9, 281.1, 1011.1, 658.6, 280.2, 166.8, 225.7, 1568.4, 511.1, 435.8, 95.0, 114.7, 189.6, 69.4, 295.2, 274.6, 331.2, 100.4, 1808.8, 393.0, 115.1, 287.4, 506.8, 186.6],
            
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        resposive: true,
        fill: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

