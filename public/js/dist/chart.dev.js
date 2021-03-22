"use strict";

new Chart(document.getElementById("bar-chart-horizontal"), {
  type: 'horizontalBar',
  data: {
    labels: ["Программирование", "ui/ux дизайн", "Медицина", "Юриспруденция"],
    datasets: [{
      label: "Популярность (человек)",
      backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
      data: [5267, 4200, 3500, 2600]
    }]
  },
  options: {
    legend: {
      display: false
    },
    title: {
      display: true,
      text: 'Статистика самых популярных курсов'
    }
  }
});

function burger() {
  var burger = document.getElementById('burger');
  var links = document.getElementById('links');
  var quit = document.getElementById('quit');
  burger.style.padding = '16px 16px 110vw 100vw';
  links.style.display = 'flex';
  quit.style.display = 'inline';
}

function quit() {
  var burger = document.getElementById('burger');
  var links = document.getElementById('links');
  var quit = document.getElementById('quit');
  burger.style.padding = '16px 16px 32px 32px';
  links.style.display = 'none';
  quit.style.display = 'none';
}