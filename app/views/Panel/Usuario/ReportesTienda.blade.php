@extends('Template.templatePanelAdministracion')
@section('Contenido')
					
					<div class="row" style="margin-top:50px">
		              	<div class="col-md-12">
		            		<!-- Nav tabs -->
							<ul class="nav nav-tabs">
							  <li><a href="#ofertas" data-toggle="tab">Reporte de Ofertas</a></li>
							  <li><a href="#suscritos" data-toggle="tab">Reporte de Suscritos</a></li>
							  <li><a href="#codigos" data-toggle="tab">Reporte de Codigos</a></li>
							  <li><a href="#personalizado" data-toggle="tab">Personalizado</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
							  <div class="tab-pane active" id="ofertas">
							  	<h4>En este apartado encontrara reportes referidos a sus ofertas</h4>

							  	<!-- Tabla por rango de fechas -->
							  	<div class="row">
									<div class="col-md-8">
										<!-- BEGIN PORTLET-->   
										<div class="portlet box blue" style="padding:0 0 10px 0; border: 1px solid #b4cef8;">
											<div class="portlet-title">
												<div id="cap-rangofechas"><i class="fa fa-reorder"></i> Por rango de fechas</div>
												
											</div>
											<div class="portlet-body form">
												<!-- BEGIN FORM-->
												<form action="#" class="form-horizontal form-bordered">
													<div class="form-body">
														<div class="form-group" style="padding:10px">
															<label class="control-label col-md-3">Rango de Fechas</label>
															<div class="col-md-6" >
																<div class="input-group" id="defaultrange">
																	<input type="text" class="form-control">
																	<span class="input-group-btn">
																	<button class="btn default date-range-toggle" type="button"><i class="fa fa-calendar"></i></button>
																	</span>
																</div>
															</div>
														</div>
														
													</div>
													<div class="form-actions fluid">
														<div class="row">
															<div class="col-md-12">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn green"><i class="fa fa-check"></i> Ver Reporte</button>
																	<button type="button" class="btn default">Cancelar</button>                              
																</div>
															</div>
														</div>
													</div>
												</form>
												<!-- END FORM-->  
											</div>
										</div>
										<!-- END PORTLET-->
									</div>
									<div class="col-md-4">
										<!-- BEGIN PORTLET-->   
										<div class="portlet box blue" style="padding:0 0 10px 0; border: 1px solid #b4cef8;">
											<div class="portlet-title text-center">
												<div id="cap-todasofertas"><i class="fa fa-reorder"></i> Todas las Ofertas</div>
												<h4>Reporte de todas las ofertas </h4>
											</div>
											<div class="portlet-body form text-center">
												<!-- BEGIN FORM-->
												<button type="submit" class="btn green"><i class="fa fa-check"></i> Ver Reporte</button>
												<button type="button" class="btn default">Cancelar</button>                              
											</div>
										</div>
										<!-- END PORTLET-->
									</div>

								</div>
								<div style="margin-top:20px"></div>
								<div class="row">
									<div class="col-md-8">
										<!-- BEGIN PORTLET-->   
										<div class="portlet box blue" style="padding:0 0 10px 0; border: 1px solid #b4cef8;">
											<div class="portlet-title">
												<div id="cap-fechadeterminada"><i class="fa fa-reorder"></i> Por fecha determinada</div>
												
											</div>
											<div class="portlet-body form" style="display: block;">
												<!-- BEGIN FORM-->
												<form action="#" class="form-horizontal form-bordered">
													<div class="form-body">
														<div class="form-group" style="padding:10px">
															<label class="control-label col-md-3">Fecha:</label>
															<div class="col-md-4">
																<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="">
																<span class="help-block">Selecciona el dia</span>
															</div>
														</div>
														
														<div class="form-group">
															<label class="control-label col-md-3">Por Mes</label>
															<div class="col-md-4">
																<div class="input-group input-medium date date-picker" data-date="10/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
																	<input type="text" class="form-control" readonly="">
																	<span class="input-group-btn">
																	<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
																	</span>
																</div>
																<!-- /input-group -->
																<span class="help-block">Selecciona el mes</span>
															</div>
														</div>
														
														
													</div>
												</div>
												<!-- END FORM-->  
												<div class="form-actions fluid">
														<div class="row">
															<div class="col-md-12">
																<div class="col-md-offset-3 col-md-9">
																	<button type="submit" class="btn green"><i class="fa fa-check"></i> Ver Reporte</button>
																	<button type="button" class="btn default">Cancelar</button>                              
																</div>
															</div>
														</div>
													</div>
											</div>

										</div>
										<!-- END PORTLET-->
									
								</div>
							</div>
							  <div class="tab-pane" id="suscritos"><h4>En este apartado encontrara reportes referidos a suscriptores</h4></div>
							  <div class="tab-pane" id="codigos"><h4>En este apartado encontrara reportes referidos a sus codigos de ofertas</h4></div>
							  <div class="tab-pane" id="personalizado"><h4>En este apartado encontrara reportes personalizados de su tienda</h4></div>
							</div>
		            	</div>
			        </div>
			        
		       
@endsection