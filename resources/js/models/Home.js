import Model from '../plugins/Model.js';

export default class Home extends Model {
 
    constructor(params = [], id = null, url = 'home') {
        super(url, id, params);
    }
}