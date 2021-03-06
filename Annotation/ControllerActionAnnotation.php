<?php
App::uses('ComponentCallbacksAnnotationFilter', 'Filter');
App::uses('BaseAnnotation', 'Annotation');
App::uses('CallbacksFilterableAnnotation', 'Filter');

/**
 * Base class for Controller action annotations
 *
 * @author kevbry
 */
abstract class ControllerActionAnnotation extends BaseAnnotation implements CallbacksFilterableAnnotation {
	/**
	 *
	 * @var Mixed The component lifecycle stage at which this annotation should run. By default, only at initialize (pre-beforeFilter). May be single or array of stages.
	 */
	public $stage = ComponentCallbacksAnnotationFilter::STAGE_INITIALIZE;

	/**
	 * Called to run this annotation on an action ($controller->request->action)
	 * on the given controller
	 */
	abstract public function invoke(Controller $controller);
}
