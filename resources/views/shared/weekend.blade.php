@inject('date','App\utilities\Date')
@if($date::isweekend())
{{ "c est le weekend"}}
@else
  {{  "ce n est pas le weekend" }}
@endif
