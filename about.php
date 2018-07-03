<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
        Les Cher Ballet
    </title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      function dynamo(){
        $('.content').height($('.container').height());
        $('.content').width($('.container').width());
      }
    </script>

    <body onresize="javascript:dynamo()" onload="javascript:dynamo();">
      <?php include('cornerbar.php'); ?>
    <center>
    <div class="container">
      <div class="content"></div>
      <?php include('header.php'); ?>
      <br/>
      <div class="row">
        <div class="col m12">
          <div class="card">
              <div class="card-content">
                <span class="card-title">Our Directors</span>
                <p>Leslie Parreco holds the Cecchetti Diploma Teacher Certificate and Cherry Dowsley holds the Cecchetti Advanced Teacher Certificate. They are qualified to instruct teachers as well as students. As part of their continuing education, they attend weekend conferences yearly sponsored by the Cecchetti Council of America, East Coast Committee. During the summer, they attend one of the many teacher conferences that are offered. To date they have attended the following: Cecchetti Teacher Conferences at Michigan State University, Hope College, Cleveland School of Ballet and Chichester, England; Ballet symposiums at Towson University; The National Ballet School Teacher's Seminar in Toronto, Canada; Vaganova (Russian) Seminar in Annapolis; and Teachers' Workshop with David Howard at the International Ballet Competition in Jackson, Mississippi. Presently, they are studying at the National Ballet Institute for the Arts, with Pamela Moore. Students for Cecchetti exams have been presented by the directors since 1976, with the large majority receiving above average grades. Many students have won scholarships for local ballet conferences, summer dance seminars, and colleges. In addition, student's professional performance experiences include local companies and theme parks.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m6">
            <div class="card horizontal">
              <div class="card-image">
                <img src="https://lorempixel.com/100/190/nature/6">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p><strong>Leslie Parreco</strong> (now retired) has taught ballet since 1973, first for several years in a public school PTA program, as co-director of "Les Cher" and in 1989 as a long term substitute at Thomas Pullen School for the Creative Arts. She served as secretary, co-chair and chairman of the East Coast Committee of the Cecchetti Council of America and is presently serving as its co-registrar. Also, she is a Permanent Examiner with the Cecchetti Council of America.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card horizontal">
              <div class="card-image">
                <img src="https://lorempixel.com/100/190/nature/6">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p><strong>Cherry Golding Dowsley</strong> (now retired) commenced teaching ballet in the Annapolis area in 1969. Her teaching experiences include the following: YMCA program, ballet instructor for a gymnastics team, faculty member for Ballet Theatre of Annapolis in 1983, as co-director of "Les Cher", instructor for the Anne Arundel County Summer Dance Camp and guest teacher and adjudicator for Maryland Council for Dance. She has performed with the Ballet de Jeunesse in Virginia and with Ballet Theatre of Annapolis from 1979 through 1990.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m6">
            <div class="card horizontal">
              <div class="card-image">
                <img src="Kelly P.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p><strong>Kelly Pasciuto</strong>, a graduate of University of Maryland, has been studying ballet most of her life and began her Cecchetti training with the directors in 1998. Kelly has been a counselor at the Cecchetti Summer Conference in Michigan for several years. She holds her Advanced Cecchetti Teacher Certificate, which qualifies her to instruct teachers and students. Kelly also is an accomplished musician and plays with the Maryland Community Band.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card horizontal">
              <div class="card-image">
                <img src="Elizabeth R.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <p><strong>Elizabeth Stough Ridenour</strong> has been trained by the directors and is a graduate of the University of Tennessee with a Bachelors of Architecture.  She holds her Elementary Cecchetti Teacher Certificate.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php include('footer.php'); ?>
      </div>
    </div>
  </center></body>
</html>
