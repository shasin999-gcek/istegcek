<html>
  <head>
    <meta charset="utf-8" />
    <style>
      body {
          border: 1.5px solid #000;
          height: 267mm;
          font-family: sans-serif;
      }  

      h2 {
        font-size: 25px;
      }
      
      div.top-section h3 {
        padding-left:20px; 
        margin: 0; 
        font-size: 16px;
        float: left;
      }  

      div.top-section address {
        margin: 0;
        padding: 0;
        font-size: 12px;
        text-align: right;
        padding-right: 10px;
      }

      div.header-section {
        margin: 5px;
      }

      div.header-section img {
        padding-left: 25px;
        vertical-align: middle;
      }

      div.header-section h2 {
        display: inline;
        vertical-align: text-top;
        padding-left: 10px;
      }

      div.header-section h4 {
        margin: 0;
        padding: 0;
        text-align: center;
      }

      div.main-header {
        border-top: 1.5px solid #000;
        border-bottom: 1.5px solid #000;
      }

      div.main-header h2 {
        text-align: center;
        margin: 5px;
      }

      h3.sub-main-header {
        margin: 0;
        text-align: center;
      }

      table.form-table {
        margin: 20px;
        width: 45em;
        empty-cells: hide;
        margin-bottom: 5px;
      }

      td {
        font-size: 13px;
        vertical-align: top;
        height: 30px;
      }

      table.form-table td.first {
        width: 50px;
      }

       table.form-table td.second {
        width: 20em;
      }

      input {
        vertical-align: middle;
      }

      label {
        vertical-align: middle;
      }

      p {
        margin: 8px;
        margin-left: 10px;
      }

      div.footer-1 {
        margin-left: 20px; 
      }

      div.footer-1 h5 {
        display: inline;
      }

      h5.date {
        margin-right: 20em;
      }


    </style>
  </head>
  <body>
    <div class="top-section">
      <h3>Details of Fee-overleaf</h3>
      <address>
        Phone : 26963431 , 26513542 <br>
        Fax   : 011-26852421 <br>
        E-mail: istedhq@vsnl.net <br>
        Website: www.isteonline.in <br>
      </address>
    </div>

    <div class="header-section">
      <img src="pdftemplates/logopdf.png">
      <h2>INDIAN SOCIETY FOR TECHNICAL EDUCATION</h2>
      <h4>SHAHEED JEET SINGH MARG, NEW DELHI-110 016</h4>
    </div>

    <div class="main-header">
        <h2>APPLICATION FORM FOR STUDENT MEMBERSHIP</h2>
    </div>
 
    <h3 class="sub-main-header">TYPE OR WRITE EVERY ENTRY NEATLY AND LEGIBLY</h3>

    <table class="form-table">
      <tr>
        <td class="first">1.</td>
        <td class="second">Name of applicant (student) <br> (in capital letters)</td>
        <td>: <?= $name ?> </td>
      </tr>
      <tr>
        <td class="first">2.</td>
        <td class="second">Date of Birth</td>
        <td>: 23/02/1999</td>
      </tr>
      <tr>
        <td class="first">3.</td>
        <td class="second">Year/Semester of Study</td>
        <td>: 2018/ S2</td>
      </tr>
      <tr>
        <td class="first">4.</td>
        <td class="second">Branch of study / Course of Study</td>
        <td>: B-tech Computer Science And Engineering</td>
      </tr>
      <tr>
        <td class="first">5.</td>
        <td class="second">Address of Institution</td>
        <td>: Govt. College Of Engineering<br>
            &nbsp;&nbsp;Mangatuparamba, P.O ParassiniKadavu<br>
            &nbsp;&nbsp;Pin: 670621
        </td>
      </tr>
      <tr>
        <td class="first">6.</td>
        <td class="second">Home address (Permanent Address)</td>
        <td>: Poovanoth House<br>
            &nbsp;&nbsp;Kottor, P.O Kadachira<br>
            &nbsp;&nbsp;Pin: 670621
        </td>
      </tr>
      <tr>
        <td class="first">7.</td>
        <td class="second">Details of Remittance<br>(Amount, draft number, bank etc.)</td>
        <td>: Account     : 6706151616 <br>
              &nbsp;&nbsp;D.D. Number : ________________ Date __________<br>
              &nbsp;&nbsp;Bank & Branch : ______________________________<br>
        </td>
      </tr>
      <tr>
        <td class="first">8.</td>
        <td>Special interest</td>
        <td>: Muhammed Shasin</td>
      </tr>
      <tr>
        <td class="first">9.</td>
        <td>Career Preference </td>
        <td>: Muhammed Shasin</td>
      </tr>
      <tr>
        <td class="first">10.</td>
        <td>Type of Service/Assistance you <br>expect form ISTE students Chapter <br>(Tick 2 or 3 only) 
        </td>
        <td>
          <input type="checkbox" checked="">
          <label>Coaching for competitive examination, job interview etc</label> <br>
          <input type="checkbox" checked="">
          <label>Supervisory and communication skill development</label> <br>
          <input type="checkbox" checked="">
          <label>Training for self-employment</label> <br>
          <input type="checkbox" checked="">
          <label>Guidance on job opportunities in India and abroad</label> <br>
          <input type="checkbox" checked="">
          <label> Arranging training in industries and visits to industry </label><br>
          <input type="checkbox" >
          <label>Special Coaching, General counselling services</label> <br>
          <input type="checkbox" checked="">
          <label>Any other item (specify)</label> <br>
        </td>
      </tr>
    </table>

    <p align="left">
    I agree to abide by the rules and regulations of the ISTE regarding Student Membership and functioning ofStudent Chapters. Single Student Membership will not be entertained. Kindly apply along with all Students andthrough ISTE Student Chapter only.</p>

    <div class="footer-1">
      <h5 class="date">Date: </h5>
      <h5 class="stu-sign">Signature: </h5>
    </div>

    <h4 style="text-align:center; margin: 5px;">Recommended for Membership</h4>
    <div style="margin-left: 20em;">
      <h5 style="margin: 5px;">Signature: </h5>
      <h5 style="margin: 5px;">Name of Faculty Advisor: </h5>
    </div>

   <hr> 
   <h4 style="text-align:center; margin: 5px;">FOR OFFICE USE ONLY</h4>
   <p align="left" style="display: inline; float: left;">Name of ISTE Students Chapter</p>
   <p align="right">Membership Number</p>
  </body>
</html>