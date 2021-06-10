<x-slot name="header">
    <h2>REGISTRO DE ESTUDIANTES</h2>
</x-slot>
@extends('layouts.boostra')
<div>
@if(session()->has('message'))
        <p>{{ session('message') }}</P>
    @endif

    <button wire:click="create()">Crear Registro</button>
    @if($isOpen)
    @include('livewire.create')
    @endif
    <table class="table">
        <thead>
            <tr>
                <th class="px-4 py-2 w-20">cod.</th>
                <th class="px-4 py-2">Código</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Dirección</th>
                <th class="px-4 py-2">Telefono</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registross as $registros)
            <tr>
                <td>{{ $registros->id}}</td>
                <td>{{ $registros->codigo}}</td>
                <td>{{ $registros->nombre}}</td>
                <td>{{ $registros->direccion}}</td>
                <td>{{ $registros->telefono}}</td>
                <td>{{ $registros->email}}</td>
                <td> <button wire:click="edit({{ $registros->id }})" class="btn btn-success">Edit</button>
                    <button wire:click="delete({{ $registros->id }})" class="btn btn-danger">Delete</button></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
