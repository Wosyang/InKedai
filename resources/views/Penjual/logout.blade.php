<!DOCTYPE html>
<html>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/logout.css') }}">

<!-- Small modal -->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">

      <center><h4>Log Out <i class="fa fa-lock"></i></h4></center>
    </div>
    <div class="modal-body">
      <center><p><i class="fa fa-question-circle-justify-center"></i> Are you sure you want to log-off? <br /></p></center>
      <div class="actionsBtns">
          <form action="/logout/logoutfix" method="get">
              <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
              <input type="submit" class="btn btn-default btn-primary" data-dismiss="modal" value="Logout" />

          </form>
      </div>
      <br>
      <form action="/home" method="get">
      <button class="btn btn-default" data-dismiss="modal">Cancel</button>
    </div>
  </div>
</div>
</div>
</html>
