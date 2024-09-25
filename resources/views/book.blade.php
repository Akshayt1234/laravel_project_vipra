@extends('layouts.main')
@push('arrow')
<i class="bi bi-arrow-left"></i>
@endpush

@push('css')
<link href="{{asset('assets/css/sale.css')}}" rel="stylesheet">
@endpush

@push('whatsapp')
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-649ecc10-852a-4286-afd4-46be45fbfe65"></div>
@endpush


@section('main.container')

<div class="container justify-content-center">
    <div class="row justify-content-center">
        <h2>Acknowledgement</h2>
        <div class="col-lg-12 col-md-6 align-items-center justify-content-center">
    

        <h6>
        <p>1.By registering on our construction website, you acknowledge that you have read and understood the terms and conditions outlined in the user agreement.</p>
        <br>
        <p>2.You acknowledge that the information provided during registration is accurate, complete, and up to date.</p>
        <br>
        <p>3.You understand that your registration on the website does not guarantee access to all features and functionalities. Certain areas or services may be restricted based on your user role or subscription level.</p>
        <br>
        <p>4.You acknowledge that any content you contribute to the website, such as comments, reviews, or forum posts, is your responsibility and should not violate any intellectual property rights, be defamatory, or contain inappropriate or offensive material.</p>
        <br>
        <p>5.You agree to use the website solely for lawful purposes and not engage in any activities that may disrupt the functionality or security of the website or violate any applicable laws or regulations.</p>
        <br>
        <p>6.You acknowledge that the website may collect and store certain personal information as outlined in the privacy policy. You understand that your personal data will be handled in accordance with applicable data protection laws.</p>
        <br>
        <p>7.You agree to keep your login credentials confidential and not share them with others. You are responsible for any activities that occur under your account.</p>
        <br>
        <p>8.You acknowledge that the website may use cookies or similar technologies to enhance your browsing experience and collect usage statistics. You can manage your cookie preferences in accordance with the website's cookie policy.</p>
        <br>
        <p>9.You understand that the website may contain links to third-party websites or resources that are not under our control. You acknowledge that we are not responsible for the content, availability, or privacy practices of such external sites.</p>
        <br>
        <p>10.You acknowledge that the construction website may periodically send you important notifications, updates, or promotional offers via email. You have the option to unsubscribe from marketing communications at any time.</p>
    </h6>
    <br>
</div>
    </div>
    <div class="modal-footer">
    <a href="{{url('/sale')}}"><button type="button" class="btn btn-danger btn-left">Back</button></a>
        <a href="{{url('/register')}}"><button type="button" class="btn btn-success">Register Now</button></a>
    </div>
    
</div>
<br>







@endsection