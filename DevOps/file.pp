file { '/home/mos3ab/afile':
ensure => 'present',
	content => 'This Is Content',
	owner => 'mos3ab',
	group => 'mos3ab',
	mode => '0644',
}

file { '/home/mos3ab/adirectory':
	ensure => 'directory',
	owner  => 'mos3ab',
	group  => 'mos3ab',
	mode   => '0755',
}

file { '/home/mos3ab/adirectory/alink':
	ensure => 'link',
	target => '/home/mos3ab/afile',
}

