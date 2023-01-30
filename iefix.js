// JavaScript Document
   1. objects = document.getElementsByTagName("object");
   2. for (var i = 0; i < objects.length; i++)
   3. {
   4.     objects[i].outerHTML = objects[i].outerHTML;
   5. }