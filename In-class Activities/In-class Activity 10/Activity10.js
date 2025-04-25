$(document).ready(function () {
  $("#birthday").datepicker();

  var cities = [
    "Charlotte",
    "New York",
    "Washington DC",
    "Chicago",
    "Los Angeles",
    "Boston"
  ];
  $("#city").autocomplete({
    source: cities
  });

  var languages = [
    "Java",
    "Python",
    "C++",
    "C#",
    "JavaScript",
    "Dart",
    "Swift",
    "Kotlin",
    "Ruby",
    "Go"
  ];
  $("#language").autocomplete({
    source: languages
  });
});
