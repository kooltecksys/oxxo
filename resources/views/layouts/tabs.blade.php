<footer id="int" class="justify-content-center">
  <ul>
      <li>
        <a class="{{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
          @if (Request::is('dashboard'))
            <image src="{{ asset('assets/images/icons/homewhite.svg') }}">
          @else
          <image src="{{ asset('assets/images/icons/homeblack.svg') }}">
          @endif
        <br>
          INICIO
        </a>
      </li>
      <li>
        <a href="/progress" class="{{ Request::is('progress') ? 'active' : '' }}">
          @if (Request::is('progress'))
            <image src="{{ asset('assets/images/icons/goalwhite.svg') }}">
          @else
            <image src="{{ asset('assets/images/icons/goalblack.svg') }}">
          @endif
          <br>
          AVANCES
        </a>
      </li>
      <li>
        <a href="/missions" class="{{ Request::is('missions') ? 'active' : '' }}">
          @if (Request::is('missions'))
            <image src="{{ asset('assets/images/icons/camerawhite.svg') }}">
          @else
            <image src="{{ asset('assets/images/icons/camerablack.svg') }}">
          @endif
          <br>
          MISIONES
        </a>
      </li>
      <li>
        <a href="/oxxo" class="{{ Request::is('oxxo') ? 'active' : '' }}">
          @if (Request::is('oxxo'))
            <image src="{{ asset('assets/images/icons/oxxowhite.svg') }}">
          @else
            <image src="{{ asset('assets/images/icons/oxxoblack.svg') }}">
          @endif
           <br>
            MI OXXO
          </a>
      </li>
      <li>
        <a href="/prizes" class="{{ Request::is('prizes') ? 'active' : '' }}">
          @if (Request::is('prizes'))
            <image src="{{ asset('assets/images/icons/giftwhite.svg') }}">
          @else
            <image src="{{ asset('assets/images/icons/giftblack.svg') }}">
          @endif
          <br>
          PREMIOS
        </a>
      </li>
  </ul>
</footer>