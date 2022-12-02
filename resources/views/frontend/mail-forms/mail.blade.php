<h5>Hello {{$customer->first_name}} {{$customer->last_name}}</h5>
<hr>
<p>
    Reservation Date: {{$customer->bookings->book_date}} <br>
    Type : {{$customer->bookings->accommodation->title}} <br>
    Details : {{$customer->bookings->accommodation->details}}
</p>
<p>If you wish to cancel your reservation. <br>
    Please contact us: 09338577401 / 09328826688 <br>
</p>
