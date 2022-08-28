<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profesor = Role::create (['name' => 'profesor']);
        $alumno = Role::create (['name' => 'alumno']);
        $manager = Role::create (['name' => 'manager']);
        $developer = Role::create (['name' => 'developer']);


        Permission ::create(['name'=> 'home'])->syncRoles([$profesor,$alumno,$manager,$developer]);
        //permiso vista grados
        Permission ::create(['name'=> 'grados.index'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'grados.show'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'grados.create'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'grados.edit'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'grados.destroy'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'grados.update'])->syncRoles([$manager,$developer]);


        //permisos certificados
        Permission ::create(['name'=> 'certificados.index'])->syncRoles([$profesor,$alumno,$manager,$developer]);
        Permission ::create(['name'=> 'certificados.show'])->syncRoles([$profesor,$alumno,$manager,$developer]);
        Permission ::create(['name'=> 'certificados.create'])->syncRoles([$profesor,$alumno,$manager,$developer]);
        Permission ::create(['name'=> 'certificados.edit'])->syncRoles([$profesor,$alumno,$manager,$developer]);
        Permission ::create(['name'=> 'certificados.destroy'])->syncRoles([$profesor,$alumno,$manager,$developer]);
        Permission ::create(['name'=> 'certificados.update'])->syncRoles([$profesor,$alumno,$manager,$developer]);
        //permisos profesores
        Permission ::create(['name'=> 'profesor.index'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'profesor.show'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'profesor.create'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'profesor.edit'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'profesor.destroy'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'profesor.update'])->syncRoles([$manager,$developer]);
        //permisos alumnos 
        Permission ::create(['name'=> 'alumnos.index'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'alumnos.show'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'alumnos.create'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'alumnos.edit'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'alumnos.destroy'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'alumnos.update'])->syncRoles([$manager,$developer]);
        // permisos notas
        Permission ::create(['name'=> 'calificaciones.index'])->syncRoles([$profesor,$manager,$developer]);
        Permission ::create(['name'=> 'calificaciones.show'])->syncRoles([$profesor,$manager,$developer]);
        Permission ::create(['name'=> 'calificaciones.create'])->syncRoles([$profesor,$manager,$developer]);
        Permission ::create(['name'=> 'calificaciones.edit'])->syncRoles([$profesor,$manager,$developer]);
        Permission ::create(['name'=> 'calificaciones.destroy'])->syncRoles([$profesor,$manager,$developer]);
        Permission ::create(['name'=> 'calificaciones.update'])->syncRoles([$profesor,$manager,$developer]);
        //permisos asignaturas
        Permission ::create(['name'=> 'asignaturas.index'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'asignaturas.show'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'asignaturas.create'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'asignaturas.edit'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'asignaturas.destroy'])->syncRoles([$manager,$developer]);
        Permission ::create(['name'=> 'asignaturas.update'])->syncRoles([$manager,$developer]);
//permisos usuarios
Permission ::create(['name'=> 'user.index'])->syncRoles([$developer]);
Permission ::create(['name'=> 'user.show'])->syncRoles([$developer]);
Permission ::create(['name'=> 'user.create'])->syncRoles([$developer]);
Permission ::create(['name'=> 'user.edit'])->syncRoles([$developer]);
Permission ::create(['name'=> 'user.destroy'])->syncRoles([$developer]);
Permission ::create(['name'=> 'user.update'])->syncRoles([$developer]);
    }
}
