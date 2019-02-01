@extends('layouts.master')

@section('content')

<form method="POST" action="<?php echo route('link-opslaan') ?>">
    @csrf
    <label for="title">Title
    <input type="text" name="title"></label>
    
    <label for="description">Description
    <input type="text" name="description"></label>

    <label for="url">URL
    <input type="text" name="url"></label>

    <input type="submit" value="Submit">
</form>

@endsection