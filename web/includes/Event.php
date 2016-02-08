<?php
require_once( 'database.php' );
require_once( 'Storage.php' );

class Event {
	public function __construct( $IdOrRow ) {
		$row = NULL;
        if ( $IdOrRow ) {
            if ( is_integer( $IdOrRow ) or is_numeric( $IdOrRow ) ) {
				$row = dbFetchOne( 'SELECT *,unix_timestamp(StartTime) as Time FROM Events WHERE Id=?', NULL, array( $IdOrRow ) );
                if ( ! $row ) {
                    Error("Unable to load Event record for Id=" . $IdOrRow );
                }
            } elseif ( is_array( $IdOrRow ) ) {
                $row = $IdOrRow;
			} else {
				Error("Unknown argument passed to Event Constructor ($IdOrRow)");
				return;
            }
        } # end if isset($IdOrRow)

		if ( $row ) {
			foreach ($row as $k => $v) {
				$this->{$k} = $v;
			}
		} else {
			Error("No row for Event " . $IdOrRow );
		}
	} // end function __construct
	public function Storage() {
		return new Storage( $this->{'StorageId'} );
	}
	public function __call( $fn, array $args){
        if(isset($this->{$fn})){
			return $this->{$fn};
            #array_unshift($args, $this);
            #call_user_func_array( $this->{$fn}, $args);
        }
    }

	public function Path() {
		$Storage = $this->Storage();
	return $Storage->Path().'/'.$this->Relative_Path();
	}
	public function Relative_Path() {
		$event_path = "";

		if ( ZM_USE_DEEP_STORAGE )
		{
			$event_path = 
				$this->{'MonitorId'}
			.'/'.strftime( "%y/%m/%d/%H/%M/%S",
					$this->{'Time'}
				     )
				;
		}
		else
		{
			$event_path = 
				$this->{'MonitorId'}
			.'/'.$this->{'Id'}
			;
		}

		return( $event_path );

	}

}


?>
