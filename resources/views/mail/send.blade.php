@component('mail::message')
    <html>
    <body>
    <div class="TTBold" style="padding:4%; border:4px #a2e0ff solid;">
        <br>
        <span class="TTBold" style="font-size:40px; color:#000000">Fba</span>
        <br>
        <h2 class="TTMedium"><strong>Новая заявка с Сайта</strong></h2>
        <br>
        <strong class="TTLight">Имя:</strong> {{ $name }}<br>
        <strong class="TTLight">Телефон:</strong> {{ $phone }}<br>
        <strong class="TTLight">Email:</strong> {{ $email }}<br>
        <strong class="TTLight">Сообщение:</strong> {{ $comment }}<br>
        <br>
    </div>
    </body>
    </html>
@endcomponent