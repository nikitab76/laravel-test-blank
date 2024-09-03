<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusOkController;
use App\Http\Controllers\UnprocessableEntity;
use App\Http\Controllers\PhpException;
use App\Http\Controllers\Nonsense;
use App\Http\Controllers\NullObject;
use App\Http\Controllers\LogsInfo;
use App\Http\Controllers\LogsEmergency;
use App\Http\Controllers\LogsError;
use App\Http\Controllers\SleepTen;
use App\Http\Controllers\SleepNinety;

Route::get('/', function () {
    echo "- /statusOk - возвращает статус 200<br>
          - /UnprocessableEntity - возвращает статус 422<br>
          - /phpException - возврат исключений<br>
          - /nonsense - происходит деление на ноль<br>
          - /logInfo - записываются логи<br>
          - /logEmergency - записываются логи<br>
          - /logError - записываются логи<br>
          - /nullObject - обращение к пустому объекту<br>
          - /sleepTen - спит 10с<br>
          - /sleepNinety - спит 90с";
});

Route::get('/statusOk',[StatusOkController::class, 'index']);
Route::get('/UnprocessableEntity',[UnprocessableEntity::class, 'index']);
Route::get('/phpException',[PhpException::class, 'index']);
Route::get('/nonsense',[Nonsense::class, 'index']);
Route::get('/logInfo',[LogsInfo::class, 'index']);
Route::get('/logEmergency',[LogsEmergency::class, 'index']);
Route::get('/logError',[LogsError::class, 'index']);
Route::get('/nullObject',[NullObject::class, 'index']);
Route::get('/sleepTen',[SleepTen::class, 'index']);
Route::get('/sleepNinety',[SleepNinety::class, 'index']);

