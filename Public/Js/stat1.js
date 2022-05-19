const labels = [
  'Genre'
];

const data = {
labels: [
'Femme',
'Homme'

],
datasets: [{
label: 'Gender',
data: [20,80],
backgroundColor: [
'rgb(255, 99, 132)',
  'rgb(54, 162, 235)'  
],
width:5,
hoverOffset: 4
}]
};

const config = {
type: 'pie',
data: data,
};
const myChart = new Chart(
document.getElementById('myChart'),
config
);