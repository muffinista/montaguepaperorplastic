<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Montague - Paper or Plastic?</title>
    <meta name="description" content="Is the recycling pickup for plastic or paper this week in Montague, MA?  Get your answer here." >
    <meta name="google-site-verification" content="96Won4KIhJYX2fWT92xZuPrJ2LNqmPkgTW6sIPF6seI" />
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <?php include "lib.php"; ?>
    <div id="container">
      <div id="body">
        <h1><?php echo paper_or_plastic(); ?></h1>
      </div>
      
      <div id="footer">
	      <div class="details">
          <p>week of <b><?php echo firstDayOfWeek(); ?></b> - <b><?php echo paper_or_plastic(); ?></b></p>
          <p>week of
            <b><?php echo firstDayOfWeek(to_datetime(next_week_date())); ?></b> - 
            <b><?php echo paper_or_plastic(next_week_date()); ?></b></p>
        </div>
        <div class="about">
	        built by <a href="http://muffinlabs.com/">muffinlabs</a>
          (<a href="http://muffinlabs.com/paper-or-plastic">details</a>)
        </div>
      </div>
    </div>
  </body>
</html>

