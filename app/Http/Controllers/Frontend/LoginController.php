<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /** Starts :: Login Page */
    public function loginpage()
    {
        return view('frontend.auth.login');
    }
    /** Ends :: Login Page */

    /**  Starts :: Login Verification */
    public function loginAdmin(LoginRequest $request)
    {
        try {
            $post = $request->all();

            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if (Auth::attempt($credentials)) {
                $user = Auth::user();


                if ($user->first_time_login === NULL) {
                    return response()->json([
                        'type' => 'warning',
                        'message' => 'Please check your email and enter otp',
                        'route' => route('admin.verify-email')
                    ]);
                } else {
                    session(['email' => $user['email']]);
                    return response()->json([
                        'type' => 'success',
                        'message' => 'Logged in Successfully !!!',
                        'route' => route('admin.dashboard')
                    ]);
                    // return redirect()->route('admin.dashboard');
                }
            } else {
                throw new Exception('Invalid email or password');
            }
        } catch (ValidationException $e) {
            $type = 'error';
            $route = route('admin.login.page');
            $message = $e->getMessage();
        } catch (QueryException $e) {
            $type = 'error';
            $route = route('admin.login.page');
            $message = $this->queryMessage;
        } catch (Exception $e) {
            $type = 'error';
            $route = route('admin.login.page');
            $message = $e->getMessage();
        }
        return response()->json(['type' => $type, 'message' => $message, 'route' => $route]);
    }
    /**  Ends :: Login Verification */


    /**  Starts :: Logged Out */
    public function logout(Request $request)
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully');
    }
    /**  Ends :: Logged Out */
}
