<style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */
      html {
        position: relative;
        min-height: 100%;
      }
      body {
        /* Margin bottom by footer height */
        margin-bottom: 60px;
      }
      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        /* Set the fixed height of the footer here */
        height: 60px;
        background-color: #f5f5f5;
      }


      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
        padding: 0 15px;
      }
      .container .text-muted {
        margin: 20px 0;
      }

</style>

<div class="footer">
    <div class="container">
        <p class="text-muted" style="text-align: center;"><a href="{{ url('/') }}">Buy</a> /
        <a href="{{ url('items/create') }}">Sell</a> /
        <a href="{{ url('contact') }}">Contact</a></p>
    </div>
</div>
