@extends('layouts.welcome-layout')

@section('content')
<div :class="{active: activeSectionIs(0), notActive: !activeSectionIs(0)}" v-if="activeSectionIs(0)">
    @include('partialsWelcome.smartsystems')
</div>

<div :class="{active: activeSectionIs(1), notActive: !activeSectionIs(1)}" v-if="activeSectionIs(1)">
    @include('partialsWelcome.wastewater')
</div>

<div :class="{active: activeSectionIs(2), notActive: !activeSectionIs(2)}" v-if="activeSectionIs(2)">
    @include('partialsWelcome.billing')
</div>
<div :class="{active: activeSectionIs(3), notActive: !activeSectionIs(3)}" v-if="activeSectionIs(3)">
    @include('partialsWelcome.frese')
</div>
<div :class="{active: activeSectionIs(4), notActive: !activeSectionIs(4)}" v-if="activeSectionIs(4)">
    @include('partialsWelcome.water')
</div>
<div :class="{active: activeSectionIs(5), notActive: !activeSectionIs(5)}" v-if="activeSectionIs(5)">
    @include('partialsWelcome.thermalEnergy')
</div>
<div :class="{active: activeSectionIs(6), notActive: !activeSectionIs(6)}" v-if="activeSectionIs(6)">
    @include('partialsWelcome.gas')
</div>
<div :class="{active: activeSectionIs(7), notActive: !activeSectionIs(7)}" v-if="activeSectionIs(7)">
    @include('partialsWelcome.electricity')
</div>
@endsection