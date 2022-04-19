<style>
            /* .test{
                background-image: url("/images/MunicipalLogo2.png") !important;
                background-size: cover;
            } */
        </style>
<center>
<div >
                @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
    <img src="/images/MunicipalLogo2.png" style="width: 70vh" alt="">
    <p>We are almost done</p>
    @if($department == 'super_admin' && $department)
    <button  onclick="deployNow()" class="button">Deploy</button>
    @endif
</div>
</center>

<style>
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>

<script>
        function deployNow(id, idpage) {
            let confirm_Final = confirm("Do you really want to DEPLOY the website?");
            if (confirm_Final) {
                window.location.href = "/admin-deploy-status-submit-get"
                // window.location.href = "/admin-remarks/"+id+"/"+idpage
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }

        function revertNow(id, idpage) {
            let confirm_Final = confirm("Do you really want to REVERT the DEPLOY of website?");
            if (confirm_Final) {
                window.location.href = "/admin-deploy-status-submit-get-revert"
                // window.location.href = "/admin-remarks/"+id+"/"+idpage
            }

            // alert(id+" "+idpage);
            // document.getElementById("demo").style.color = "red";
        }

      
    </script>