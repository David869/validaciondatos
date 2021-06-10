@extends('layouts.boostra')


<div class="fixed z-10 overflow-y-auto ease-out duration-400">

Create


    <form >
    <
        <div class="container">
            <div class="mb-4">
            <b><label for="name">Código</label></b>
                <input type="text" id="codigo" placeholder="Escriba el codigo" wire:model="codigo">
                @error('codigo')<span class="text-red">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
            <b> <label for="color">Nombre</label></b>
                <input type="text" id="nombre" placeholder="Escriba el nombre" wire:model="nombre">
                @error('nombre')<span class="text-red">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
            <b><label for="color">Dirección</label></b>
                <input type="text" id="direccion" placeholder="Escriba la direccion" wire:model="direccion">
                @error('direccion')<span class="text-red">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
            <b> <label for="color">Telefono</label></b>
                <input type="text" id="telefono" placeholder="Escriba el telefono" wire:model="telefono">
                @error('telefono')<span class="text-red">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
            <b><label for="color">Email</label></b>
                <input type="text" id="email" placeholder="Escriba el email" wire:model="email">
                @error('email')<span class="text-red">{{ $message }}</span> @enderror
            </div>

    

            <div class="mb-4">
                <button wire:click.prevent="store()" type="button"class="btn btn-primary">Guardar</button>
                <button wire:click.prevent="closeModal()" type="button" class="btn btn-secondary">Cerrar</button>
            </div>
        </div>
    
    </form>


</div>