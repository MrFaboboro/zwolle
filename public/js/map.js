var map = L.map("map").setView([0, 0], 1);

L.tileLayer(
  "https://api.maptiler.com/maps/basic/{z}/{x}/{y}.png?key=3sst8tqwxbzuhRdKzZin"
).addTo(map);

var marker = L.marker([50, -20], 1).addTo(map);
