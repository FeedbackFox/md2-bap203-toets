@extends('layouts.master')

@section('content')

<form method="POST" action="<?php echo route('link-opslaan') ?>">
    @csrf
    <label>Title
    <input type="text" name="title"></label>
    <label>Description
    <input type="text" name="description"></label>
    <label>URL
    <input type="text" name="url"></label>
    <input type="submit" value="Submit">
</form>

@endsection