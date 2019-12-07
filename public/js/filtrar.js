$(document).ready( function ()
{
    $( '#buscar' ).keyup( function() {
        filtro( $( this ).val() );
    } );

    function filtro( value )
    {
        $( '#filtrar tbody>tr' ).each( function() {
            let encontrar = 'false';
            $( this ).each( function() {
                if( $( this ).text().toLowerCase().indexOf( value.toLowerCase() ) >= 0 )
                {
                    encontrar = 'true';
                }
            } );
            if( encontrar == 'true' )
            {
                $( this ).show();
            }
            else
            {
                $( this ).hide();
            }
        } );
    }
} );
