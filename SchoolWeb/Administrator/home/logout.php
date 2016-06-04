<?php
  session_start();
  unset($_SESSION['adminname']);
  echo'<script>window.top.location.href="http://127.0.0.1/school_work/Administrator/index.html";</script>';
?> 