<x-mail::message  style="align-items: flex-end">



<x-mail::table >
|  رسالة تواصل معنا
| ------------- |:-------------:
| الاسم     : {{$name}}
|الايميل     : {{ $email}} 
| الرسالة    : {{$msg}}

</x-mail::table>



Thanks,<br>
{{$name}}
</x-mail::message>

