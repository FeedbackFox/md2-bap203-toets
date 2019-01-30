@extends('layouts.master')

@section('content')

<form method="POST" action="<?php echo route('link-opslaan') ?>">
    @csrf
    <input type="text" name="title">
    <input type="text" name="description">
    <input type="text" name="url">
    <input type="submit" value="Submit">
</form>

@endsection