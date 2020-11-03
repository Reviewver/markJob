		var toCopy  = document.getElementById( 'to-copy' ),
		btnCopy = document.getElementById( 'copy' );
		
		var toCopyObjet  = document.getElementById( 'objet' ),
		btnCopyObjet = document.getElementById( 'copyObjet' );
		
		var toCopyObjetEmail  = document.getElementById( 'company_email' ),
		btnCopyObjetEmail = document.getElementById( 'copyEmail' );

		btnCopyObjet.addEventListener( 'click', function(){
		toCopyObjet.select();
		document.execCommand( 'copy' );
		return false;
		} );
		
		btnCopyObjetEmail.addEventListener( 'click', function(){
		toCopyObjetEmail.select();
		document.execCommand( 'copy' );
		return false;
		} );
		
		
		btnCopy.addEventListener( 'click', function(){
		toCopy.select();
		document.execCommand( 'copy' );
		return false;
		} );