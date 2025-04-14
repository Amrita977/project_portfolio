
@extends('layouts.app')

@section('title', 'Home - Amrita Portfolio')
@section('meta_description', 'Fourth-year CSE student portfolio website')
@section('meta_keywords', 'Python, Laravel, Portfolio, DevFolio')

@section('content')

@include('components.sections.hero')
@include('components.sections.about')
@include('components.sections.resume')
@include('components.sections.services')
@include('components.sections.portfolio')
@include('components.sections.faq')
@include('components.sections.contact')

@endsection
