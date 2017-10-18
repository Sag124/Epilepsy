@extends('main')

@section('title', '| Epilepsy Back End Data')

@section('header')
<style>
        body{
            background-color: lightblue; 
        }
    </style>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Epilepsy Back End Data</title>
    <style>
        body{
            background-color: lightblue; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well">
            <h1 class="text-center"><a href="{{ route('analytics') }}">Analytics</a></h1>
                    
                </div>    
            </div>
            <div class="col-md-5">
            <div class="well">
            <h1 class="text-center"><a href="{{ route('data') }}">Patients Data</a></h1>
            </div>
            </div>
        </div>
        <div class="row">
        	 <div class="col-md-12">
                <img src="img/epilepsy-1.jpg" alt="" usemap="#Map" />
            <map name="Map" id="Map">
                <area alt="" title="" href="{{ route('screen1.index') }}" shape="rect" coords="5,101,268,440" />
                <area alt="" title="" href="{{ route('screen2.index') }}" shape="rect" coords="278,109,529,431" />
                <area alt="" title="" href="{{ route('screen3.index') }}" shape="rect" coords="545,108,797,433" />
                <area alt="" title="" href="{{ route('screen4.index') }}" shape="rect" coords="807,109,1063,436" />
                <area alt="" title="" href="{{ route('screen6.index') }}" shape="rect" coords="6,451,267,782" />
                <area alt="" title="" href="{{ route('screen5.index') }}" shape="rect" coords="276,449,533,781" />
                <area alt="" title="" href="{{ route('screen7.index') }}" shape="rect" coords="540,452,798,782" />
                <area alt="" title="" href="#" shape="rect" coords="811,452,1064,782" />
            </map>
            </div>
        </div>
    </div>
    

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>