<html>
<head>
    <script type="text/javascript" src="jquery-1.2.6.min.js"></script>
    <script type="text/javascript">
$(function(){ //on document ready
  //to german from any language:
  $('body').translate('de');
        
  //from english to german:
  $('body').translate('en', 'de');
        
  //with options:
  $('body').translate('de', { toggle: true } );
  $('body').translate('en', 'de', { toggle: true } );
  
  //you can set the languges in the options too (setting as a separate parameter like above overrides it):
  $('body').translate( { from: 'en', to: 'de', toggle: true} );

  //as of v1.4 you can also pass a complete callback as the third argument:
  $('body').translate('en','de', function(){ alert("complete"); });
})
</script>
</head>
<body>
    Hello
</body>
</html>