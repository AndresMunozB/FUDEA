@extends(Auth::check() ? 'layouts.plat' : 'layouts.inicio')

@role('admin')
@php ($pagina = 'solicitudes')
@endrole
@role('ejecutivo')
@php ($pagina = 'solicitudes')
@endrole
@role('socio')
@php ($pagina = 'formulario')
@endrole

 <!-- Debería ir hazte socio 77-->
@section('title')
Formulario
@endsection

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">			
			<form action="{{ route('update_form_path',['form' => $form->id]) }}" method="POST">
				<div class="panel panel-default">
					@if(count($errors) > 0 )
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li> {{$error}} </li>
							@endforeach
						</ul>
					</div>
					@endif
						{{ csrf_field() }}
						{{ method_field('PUT') }}

					<div class="panel-heading">Hazte socio </div>
					<div class="panel-body">
						<div class="form-group row">
							<div class="col-md-12">
								<label> <h2>Datos personales</h2> </label>
							</div>
						</div>
						<!-- Primera fila Datos personales-->
						<div class="form-group row">
							<div class="col-md-4">
								<label for="name">Nombre:</label>
								<input type="text" name="name" class="form-control" value="{{ $form->name }}" placeholder="Nombre">
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>							

							<div class="col-md-4">
								<label for="apellido_paterno">Apellido paterno:</label>
								<input type="text" name="apellido_paterno" class="form-control" value="{{ $form->apellido_paterno }}" placeholder="Apellido">
							</div>							
							<div class="col-md-4">
								<label for="apellido_materno">Apellido materno:</label>
								<input type="text" name="apellido_materno" class="form-control" value="{{ $form->apellido_materno }}" placeholder="Apellido">
							</div>
						</div>
						<!-- Segunda fila-->
						<div class="form-group row">
							<div class="col-md-4">
								<label for="rut">Rut:</label>
								<input type="text" name="rut" class="form-control" value="{{ $form->rut }}" placeholder="12.345.678-9">
							</div>							
							<div class="col-md-4">
								<label for="fecha_nacimiento">Fecha de nacimiento:</label>
								<input id="fecha_nacimiento" placeholder="12/09/1898" type="date" class="form-control" name="fecha_nacimiento" value="{{ $form->fecha_nacimiento }}" required>

                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
							</div>
                        	<div class="col-md-4">
								<label for="telefono">Teléfono fijo:</label>
								<input type="tel" name="telefono"  placeholder="12345678" class="form-control" value="{{ $form->telefono }}">
							</div>
						</div>
						<!-- Tercera fila-->
						<div class="form-group row">
							<div class="col-md-4">
								<label for="celular">Celular:</label>
								<input type="tel" name="celular" class="form-control" value="{{ $form->celular }}" placeholder="56968785086">
							</div>
							<div class="col-md-8">
								<label for="email">Correo electrónico:</label>
								<input type="email" name="email" class="form-control" value="{{ $form->email }}" placeholder="correo@gmail.com">
							</div>
						</div>
						<!-- Cuarta fila -->
						<div class="form-group row">
							<div class="col-md-12">
								<label for="direccion">Dirección:</label>
								<input type="text" name="direccion" class="form-control" value="{{ $form->direccion }}" placeholder="Villa santa marta #1231">
							</div>							
						</div>
						<!-- Quinta fila Datos académicos-->
						<div class="form-group row">
							<div class="col-md-12">
								<label> <h2>Datos académicos</h2> </label>
							</div>
						</div>
						<!-- Sexta fila-->
						<div class="form-group row">
							<div class="col-md-6">
								<label for="universidad">Universidad:</label>
								<input type="text" name="universidad" placeholder="Unab" class="form-control" value="{{ $form->universidad }}">
							</div>							
							<div class="col-md-6">
								<label for="carrera">Carrera:</label>
								<input type="text" name="carrera" class="form-control" value="{{ $form->carrera }}" placeholder="Medicina">
							</div>
						</div>
						<!-- Quinta fila-->
						<div class="form-group row">
							<div class="col-md-3">
								<label for="egreso">Año de egreso:</label>
								<select  class="form-control" name="egreso" onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
									<option @if( $form->egreso == 2020 )selected @endif value="2020">2020</option>
									<option @if( $form->egreso == 2019 )selected @endif value="2019">2019</option>
									<option @if( $form->egreso == 2018 )selected @endif value="2018">2018</option>
									<option @if( $form->egreso == 2017 )selected @endif value="2017">2017</option>
									<option @if( $form->egreso == 2016 )selected @endif value="2016">2016</option>
									<option @if( $form->egreso == 2015 )selected @endif value="2015">2015</option>
									<option @if( $form->egreso == 2014 )selected @endif value="2014">2014</option>
									<option @if( $form->egreso == 2013 )selected @endif value="2013">2013</option>
									<option @if( $form->egreso == 2012 )selected @endif value="2012">2012</option>
									<option @if( $form->egreso == 2011 )selected @endif value="2011">2011</option>
									<option @if( $form->egreso == 2010 )selected @endif value="2010">2010</option>
									<option @if( $form->egreso == 2009 )selected @endif value="2009">2009</option>
									<option @if( $form->egreso == 2008 )selected @endif value="2008">2008</option>
									<option @if( $form->egreso == 2007 )selected @endif value="2007">2007</option>
									<option @if( $form->egreso == 2006 )selected @endif value="2006">2006</option>
									<option @if( $form->egreso == 2005 )selected @endif value="2005">2005</option>
									<option @if( $form->egreso == 2004 )selected @endif value="2004">2004</option>
									<option @if( $form->egreso == 2003 )selected @endif value="2003">2003</option>
									<option @if( $form->egreso == 2002 )selected @endif value="2002">2002</option>
									<option @if( $form->egreso == 2001 )selected @endif value="2001">2001</option>
									<option @if( $form->egreso == 2000 )selected @endif value="2000">2000</option>
									<option @if( $form->egreso == 1999 )selected @endif value="1999">1999</option>
									<option @if( $form->egreso == 1998 )selected @endif value="1998">1998</option>
									<option @if( $form->egreso == 1997 )selected @endif value="1997">1997</option>
									<option @if( $form->egreso == 1996 )selected @endif value="1996">1996</option>
									<option @if( $form->egreso == 1995 )selected @endif value="1995">1995</option>
									<option @if( $form->egreso == 1994 )selected @endif value="1994">1994</option>
									<option @if( $form->egreso == 1993 )selected @endif value="1993">1993</option>
									<option @if( $form->egreso == 1992 )selected @endif value="1992">1992</option>
									<option @if( $form->egreso == 1991 )selected @endif value="1991">1991</option>
									<option @if( $form->egreso == 1990 )selected @endif value="1990">1990</option>
									<option @if( $form->egreso == 1989 )selected @endif value="1989">1989</option>
									<option @if( $form->egreso == 1988 )selected @endif value="1988">1988</option>
									<option @if( $form->egreso == 1987 )selected @endif value="1987">1987</option>
									<option @if( $form->egreso == 1986 )selected @endif value="1986">1986</option>
									<option @if( $form->egreso == 1985 )selected @endif value="1985">1985</option>
									<option @if( $form->egreso == 1984 )selected @endif value="1984">1984</option>
									<option @if( $form->egreso == 1983 )selected @endif value="1983">1983</option>
									<option @if( $form->egreso == 1982 )selected @endif value="1982">1982</option>
									<option @if( $form->egreso == 1981 )selected @endif value="1981">1981</option>
									<option @if( $form->egreso == 1980 )selected @endif value="1980">1980</option>
									<option @if( $form->egreso == 1979 )selected @endif value="1979">1979</option>
									<option @if( $form->egreso == 1978 )selected @endif value="1978">1978</option>
									<option @if( $form->egreso == 1977 )selected @endif value="1977">1977</option>
									<option @if( $form->egreso == 1976 )selected @endif value="1976">1976</option>
									<option @if( $form->egreso == 1975 )selected @endif value="1975">1975</option>
									<option @if( $form->egreso == 1974 )selected @endif value="1974">1974</option>
									<option @if( $form->egreso == 1973 )selected @endif value="1973">1973</option>
									<option @if( $form->egreso == 1972 )selected @endif value="1972">1972</option>
									<option @if( $form->egreso == 1971 )selected @endif value="1971">1971</option>
									<option @if( $form->egreso == 1970 )selected @endif value="1970">1970</option>
									<option @if( $form->egreso == 1969 )selected @endif value="1969">1969</option>
									<option @if( $form->egreso == 1968 )selected @endif value="1968">1968</option>
									<option @if( $form->egreso == 1967 )selected @endif value="1967">1967</option>
									<option @if( $form->egreso == 1966 )selected @endif value="1966">1966</option>
									<option @if( $form->egreso == 1965 )selected @endif value="1965">1965</option>
									<option @if( $form->egreso == 1964 )selected @endif value="1964">1964</option>
									<option @if( $form->egreso == 1963 )selected @endif value="1963">1963</option>
									<option @if( $form->egreso == 1962 )selected @endif value="1962">1962</option>
									<option @if( $form->egreso == 1961 )selected @endif value="1961">1961</option>
									<option @if( $form->egreso == 1960 )selected @endif value="1960">1960</option>
									<option @if( $form->egreso == 1959 )selected @endif value="1959">1959</option>
									<option @if( $form->egreso == 1958 )selected @endif value="1958">1958</option>
									<option @if( $form->egreso == 1957 )selected @endif value="1957">1957</option>
									<option @if( $form->egreso == 1956 )selected @endif value="1956">1956</option>
									<option @if( $form->egreso == 1955 )selected @endif value="1955">1955</option>
									<option @if( $form->egreso == 1954 )selected @endif value="1954">1954</option>
									<option @if( $form->egreso == 1953 )selected @endif value="1953">1953</option>
									<option @if( $form->egreso == 1952 )selected @endif value="1952">1952</option>
									<option @if( $form->egreso == 1951 )selected @endif value="1951">1951</option>
									<option @if( $form->egreso == 1950 )selected @endif value="1950">1950</option>
									<option @if( $form->egreso == 1949 )selected @endif value="1949">1949</option>
									<option @if( $form->egreso == 1948 )selected @endif value="1948">1948</option>
									<option @if( $form->egreso == 1947 )selected @endif value="1947">1947</option>
									<option @if( $form->egreso == 1946 )selected @endif value="1946">1946</option>
									<option @if( $form->egreso == 1945 )selected @endif value="1945">1945</option>
									<option @if( $form->egreso == 1944 )selected @endif value="1944">1944</option>
									<option @if( $form->egreso == 1943 )selected @endif value="1943">1943</option>
									<option @if( $form->egreso == 1942 )selected @endif value="1942">1942</option>
									<option @if( $form->egreso == 1941 )selected @endif value="1941">1941</option>
									<option @if( $form->egreso == 1940 )selected @endif value="1940">1940</option>
									<option @if( $form->egreso == 1939 )selected @endif value="1939">1939</option>
									<option @if( $form->egreso == 1938 )selected @endif value="1938">1938</option>
									<option @if( $form->egreso == 1937 )selected @endif value="1937">1937</option>
									<option @if( $form->egreso == 1936 )selected @endif value="1936">1936</option>
									<option @if( $form->egreso == 1935 )selected @endif value="1935">1935</option>
									<option @if( $form->egreso == 1934 )selected @endif value="1934">1934</option>
									<option @if( $form->egreso == 1933 )selected @endif value="1933">1933</option>
									<option @if( $form->egreso == 1932 )selected @endif value="1932">1932</option>
									<option @if( $form->egreso == 1931 )selected @endif value="1931">1931</option>
									<option @if( $form->egreso == 1930 )selected @endif value="1930">1930</option>
									<option @if( $form->egreso == 1929 )selected @endif value="1929">1929</option>
									<option @if( $form->egreso == 1928 )selected @endif value="1928">1928</option>
									<option @if( $form->egreso == 1927 )selected @endif value="1927">1927</option>
									<option @if( $form->egreso == 1926 )selected @endif value="1926">1926</option>
									<option @if( $form->egreso == 1925 )selected @endif value="1925">1925</option>
									<option @if( $form->egreso == 1924 )selected @endif value="1924">1924</option>
									<option @if( $form->egreso == 1923 )selected @endif value="1923">1923</option>
									<option @if( $form->egreso == 1922 )selected @endif value="1922">1922</option>
									<option @if( $form->egreso == 1921 )selected @endif value="1921">1921</option>
									<option @if( $form->egreso == 1920 )selected @endif value="1920">1920</option>
									<option @if( $form->egreso == 1919 )selected @endif value="1919">1919</option>
									<option @if( $form->egreso == 1918 )selected @endif value="1918">1918</option>
									<option @if( $form->egreso == 1917 )selected @endif value="1917">1917</option>
									<option @if( $form->egreso == 1916 )selected @endif value="1916">1916</option>
									<option @if( $form->egreso == 1915 )selected @endif value="1915">1915</option>
									<option @if( $form->egreso == 1914 )selected @endif value="1914">1914</option>
									<option @if( $form->egreso == 1913 )selected @endif value="1913">1913</option>
									<option @if( $form->egreso == 1912 )selected @endif value="1912">1912</option>
									<option @if( $form->egreso == 1911 )selected @endif value="1911">1911</option>
									<option @if( $form->egreso == 1910 )selected @endif value="1910">1910</option>
									<option @if( $form->egreso == 1909 )selected @endif value="1909">1909</option>
									<option @if( $form->egreso == 1908 )selected @endif value="1908">1908</option>
									<option @if( $form->egreso == 1907 )selected @endif value="1907">1907</option>
									<option @if( $form->egreso == 1906 )selected @endif value="1906">1906</option>
									<option @if( $form->egreso == 1905 )selected @endif value="1905">1905</option>
									<option @if( $form->egreso == 1904 )selected @endif value="1904">1904</option>
									<option @if( $form->egreso == 1903 )selected @endif value="1903">1903</option>
									<option @if( $form->egreso == 1902 )selected @endif value="1902">1902</option>
									<option @if( $form->egreso == 1901 )selected @endif value="1901">1901</option>
								</select>
							</div>							
							<div class="col-md-5">
								<label for="departamento">Departamento:</label>
								<input type="text" name="departamento" class="form-control" value="{{ $form->departamento }}" placeholder="1990">
							</div>
							<div class="col-md-4">
								<label for="facultad">Facultad:</label>
								<input type="text" name="facultad" class="form-control" value="{{ $form->facultad }}" placeholder="Facultad de ingenieria">
							</div>
						</div>
						<!-- Sexta fila Datos laborales-->
						<div class="form-group row">
							<div class="col-md-12">
								<label> <h2>Datos laborales</h2> </label>
							</div>
						</div>
						<!-- Septima fila -->
						<div class="form-group row">
							<div class="col-md-6">
								<label for="empresa">Empresa/Institución:</label>
								<input type="text" name="empresa" class="form-control" value="{{ $form->empresa }}" placeholder="Fudea">
							</div>
							<div class="col-md-6">
								<label for="cargo">Cargo:</label>
								<input type="text" name="cargo" class="form-control" value="{{ $form->cargo }}" placeholder="Jefe">
							</div>	
						</div>
						<!-- Octava fila-->
						<div class="form-group row">
							<div class="col-md-4">
                            	<label for="pago" class="col-md-8 control-label">Método de pago:</label>
                                <select class="form-control" name="pago">
                                   	<option @if( $form->pago == 'efectivo' )selected @endif value="efectivo">Efectivo</option>
                                    <option @if( $form->pago == 'debito' )selected @endif value="debito">Tarjeta de debito</option>
                                    <option @if( $form->pago == 'transferencia' )selected @endif value="transferencia">Transferencia electronica</option>
                                    <option @if( $form->pago == 'cheque' )selected @endif value="cheque">Cheque</option>
                                </select>
                        	</div>
						</div>
						<!-- No hay más filas-->
					</div>
					<div class="panel-footer">
						<button type="submit" class="btn btn-primary" > Enviar formulario</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">			
				<div class="panel panel-default">
					<div class="panel-heading">Consideraciones, Obligaciones y Responsabilidades</div>
					<div class="panel-body">
				    <p> <!-- Sirven para agregar parrafos-->
				    <h2>De Fundación de Egresados y Amigos</h2>
				    •   La Fundación de Egresados y Amigos U. de Santiago  se compromete a dar cumplimiento en todos los servicios y beneficios ofertados por la institución a sus adherentes activos, es decir, a todos aquellos que se encuentran con sus pagos al día.<br><br>
				    •   La Fundación se obliga a hacer entrega a sus adherentes de una credencial, con la cual podrá acceder a los beneficios y servicios, el adherente deberá presentar su credencial de socio de FUDEA para obtener el beneficio respectivo.<br><br>
				    •   La Fundación  se compromete a guardar la confidencialidad de los datos personales de sus adherentes. <br><br>
				    •   En el caso de incumplimientos en las fechas de las cuotas de pago, la Fundación deberá informar al adherente para regularizar su situación.<br>

				    <h2>Del Adherente:</h2>
				    •   Declara conocer la misión y objetivos de la Fundación de Egresados y Amigos U. de Santiago así como los servicios y beneficios a los cuales tiene acceso al ser adherente de la Fundación.<br><br>
				    •   Al inscribirse como adherente por el período de un año, acepta la renovación automática por otro período anual, de lo contrario, si desea desvincularse al cabo de un año, debe notificar formalmente su decisión en el plazo máximo de 20 días antes de vencer dicho período al correo egresados@fudeausach.cl .<br><br>
				    •   Se compromete a mantener actualizados sus antecedentes e informar a la Fundación en caso de cambio o modificación de alguno de ellos. <br><br>
				    •   Como adherente de FUDEA declara estar en conocimiento  que la credencial de socio es personal e intransferible.<br><br>
				    •   En la eventualidad de atraso en el  pago de más de 2 cuotas consecutivas anuales, se compromete a regularizar la situación haciendo efectivo su pago o en su defecto cancelando la totalidad de la anualidad.   <br><br>           
				    </p>
				    </div>
				</div>
		</div>
	</div>
</div>


@endsection