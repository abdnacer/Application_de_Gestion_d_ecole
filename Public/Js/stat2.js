const lbls = [
    'class 1',
    'class 2',
    'class 3',
    'class 4',
    'class 5',
    'class 6',
  ];

  const Data = {
    labels: lbls,
    datasets: [{
      label: 'Classes',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 25],
    }]
  };

  const confg = {
    type: 'line',
    data: Data,
    options: {}
  };
  const stat = new Chart(
    document.getElementById('stat'),
    confg
  );