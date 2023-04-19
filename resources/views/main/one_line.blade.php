@extends('layouts.app')

@section('content')

@livewire('one', [
'date' => $date,'id' => $id])

@endsection