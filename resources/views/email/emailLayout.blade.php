<!DOCTYPE html>
<html>
<head>

  <title>Email Verification</title>

</head>
<body>
  <section>
    <div>

      <p>{{$randOb->message}}</p>
     <a  href="{{url('verify/'.$randOb->number.'')}}">click Me</a>
      <p>Thanks,</p>
      <p>petukbd.com</p>
    </div>
  </section>

</body>
</html>
