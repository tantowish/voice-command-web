if (annyang) {
  // Add our commands to annyang

  var commands = {
    'home': function(){
      window.location = "../../"
    },
    'speakers': function(){
      window.location = "../../speakers.php"
    },
    'gallery': function(){
      window.location="../../gallery.php"
    },
    'sponsors': function(){
      window.location = "../../sponsors.php"
    },
    'news': function(){
      window.location = "../../news.php"
    },
    'contact': function(){
      window.location = "../../contact.php"
    },
  }
  annyang.addCommands({
    'hello': function() { alert('Hello world!'); }
  });

  // Tell KITT to use annyang
  SpeechKITT.annyang();

  // Define a stylesheet for KITT to use
  SpeechKITT.setStylesheet('//cdnjs.cloudflare.com/ajax/libs/SpeechKITT/1.0.0/themes/flat.css');

  // Render KITT's interface
  SpeechKITT.vroom();
}