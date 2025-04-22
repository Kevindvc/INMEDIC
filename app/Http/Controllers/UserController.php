<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Cita;

class UserController extends Controller
{
     // Método para registrar usuarios
     public function register(Request $request)
     {
        

         // Validar los datos que vienen en la petición
         $validator = Validator::make($request->all(), [
             'nombre'            => 'nullable|string|max:100',
             'email'             => 'nullable|email|unique:users,email',
             'password'          => 'nullable|string|min:6',
             'telefono'          => 'nullable|string|max:20',
             'fecha_nacimiento'  => 'nullable|date',
             'alergia'           => 'nullable|string|max:255',
             'patologias'        => 'nullable|string',
             'plan'              => 'nullable|in:gratutio,basico,premiun',
             'genero'            => 'nullable|in:Masculino,Femenino,Otro',
             'estado'            => 'nullable|boolean',
             'vales'             => 'nullable|boolean'
         ]);
 
         
         if ($validator->fails()) {
             return response()->json($validator->errors(), 400);
         }
 
         // Crea el usuario
         $user = new User();
         $user->nombre           = $request->nombre;
         $user->email            = $request->email;
         $user->password         = $request->password ? Hash::make($request->password) : null;
         $user->telefono         = $request->telefono ?? '0';
         $user->estado           = $request->estado;
         $user->fecha_nacimiento = $request->fecha_nacimiento;
         $user->vales            = $request->vales ?? 0;
         $user->alergia          = $request->alergia;
         $user->patologias       = $request->patologias;
         $user->plan             = $request->plan ?? 'gratutio';
         $user->genero           = $request->genero;
         $user->save();
 
         // Devolver respuesta
         return response()->json([
             'message' => 'Usuario registrado exitosamente',
             'user'    => $user
         ], 201);
     }

     public function login(Request $request)
{
    // Validar los datos que vienen en la petición
    $validator = Validator::make($request->all(), [
        'email'    => 'required|email',
        'password' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }

    // Buscar al usuario por email
    $user = User::where('email', $request->email)->first();

    // Verificar si el usuario existe y si la contraseña es correcta
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'message' => 'Credenciales incorrectas'
        ], 401);
    }

        // Obtener citas junto con nombre del doctor
        $citas = Cita::with('doctor')
        ->where('user_id', $user->id)
        ->get()
        ->map(function($cita) {
            return [
                'id'              => $cita->id,
                'fecha_hora'      => $cita->fecha_hora,
                'estado'          => $cita->estado,
                'metodo'          => $cita->metodo,
                'especialidad'    => $cita->especialidad,
                'enlace'          => $cita->enlace,
                'notas_adicionales' => $cita->notas_adicionales,
                'Doctor'   => $cita->doctor ? $cita->doctor->nombre : null,
            ];
        });

    
    $fecha_nacimiento = \Carbon\Carbon::parse($user->fecha_nacimiento);
    $edad = $fecha_nacimiento->age;

    
    return response()->json([
        'message' => 'Login exitoso',
        'user' => [
            'nombre'        => $user->nombre,
            'edad'          => $edad,
            'telefono'      => $user->telefono,
            'alergia'       => $user->alergia,
            'patologias'    => $user->patologias,
            'plan'          => $user->plan,
        ],
        'citas' => $citas
    ], 200);

   
    
}


}
