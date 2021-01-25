<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Montague - Paper or Plastic?</title>
    <meta name="description" content="Is the recycling pickup for plastic or paper this week in Montague, MA?  Get your answer here." >
    <meta name="viewport" content="width=device-width">
    <style>
     body, html {
       font-family: sans-serif;
       height: 98vh;
       display: grid;
       grid-template-columns: 1fr;
       grid-template-rows: 1fr auto;
       grid-template-areas:
         'main'
         'footer';
     }
     main {
       margin: auto;
       grid-area: main;
     }
     h1 {
       font-size: 400%;
     }
     footer {
       grid-area: footer;
       display: flex;
       font-size: 0.8em;
       justify-content: space-between;
     }
    </style>
  </head>
  <body>
    <?php include "lib.php"; ?>
    <main>
      <h1><?php echo paper_or_plastic(); ?></h1>
    </main>
    <footer>
	    <div class="details">
        <p>week of <b><?php echo firstDayOfWeek(); ?></b> - <b><?php echo paper_or_plastic(); ?></b></p>
        <p>week of
          <b><?php echo firstDayOfWeek(to_datetime(next_week_date())); ?></b> - 
          <b><?php echo paper_or_plastic(next_week_date()); ?></b></p>
      </div>
      <div class="about">
	      built by <a href="http://muffinlabs.com/">muffinlabs</a>
      </div>
    </footer>
  </body>
</html>

