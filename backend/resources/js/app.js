import './bootstrap';
import { Application } from '@hotwired/stimulus';
import FormController from './controllers/form_controller';

const application = Application.start();
application.register('form', FormController);
