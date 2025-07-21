@extends('layouts.app')

@section('hero')
  @include('components.sections.hero')
@endsection

@section('content')
  @include('components.sections.about')
  @include('components.sections.services')
@endsection
