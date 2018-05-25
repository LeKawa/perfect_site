<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page Title</title>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="/src.9c386c90.css"></head>

<body>
  <section class="contact-wrap">
    <form action="" method="POST" class="contact-form">
      <div class="col-sm-6">
        <div class="input-block">
          <select name="profil" required="" data-error="Selectionner un profil" size="1">
            <option value="" disabled="" selected="">Vous êtes</option>
            <option value="Un journaliste">Un journaliste</option>
            <option value="Un lecteur">Un lecteur</option>
            <option value="Un partenaire">Un partenaire</option>
            <option value="Un office de tourisme">Un office de tourisme</option>
               </select><br>
          <br>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="input-block">
          <label for="">company</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-block">
          <label for="">surname</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-block">
          <label for="">email</label>
          <input type="email" class="form-control">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-block">
          <label for="">Phone</label>
          <input type="tel" class="form-control">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-block textarea">
          <label for="">Votre message ici</label>
          <textarea cols="30" rows="5" type="text" class="form-control"></textarea>
        </div>
      </div>
      <div class="col-sm-12">
        <input class="square-button" type="submit" name="contact" value="Envoyer">
      </div>
    </form>
  </section>

  <script src="/src.9c386c90.js"></script>
  <script>
    //material contact form animation
    $('.contact-form').find('.form-control').each(function() {
      var targetItem = $(this).parent();
      if ($(this).val()) {
        $(targetItem).find('label').css({
          'top': '10px',
          'fontSize': '14px'
        });
      }
    })
    $('.contact-form').find('.form-control').focus(function() {
      $(this).parent('.input-block').addClass('focus');
      $(this).parent().find('label').animate({
        'top': '10px',
        'fontSize': '14px'
      }, 300);
    })
    $('.contact-form').find('.form-control').blur(function() {
      if ($(this).val().length == 0) {
        $(this).parent('.input-block').removeClass('focus');
        $(this).parent().find('label').animate({
          'top': '25px',
          'fontSize': '18px'
        }, 300);
      }
    })
  </script>
</body>

</html>
