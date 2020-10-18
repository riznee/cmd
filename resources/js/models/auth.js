import BaseModel from '../plugins/basemodel';

export default class Auth extends BaseModel{

    constructor(id = null, url = 'login', params=[] )
    {
        super(url, id, params);
        this.name = '';
        this.email = '';
        this.active = '';
        this.permission = {};
        this.role = {};
        this.photo = '';
        this.LOGIN =''

    }
    
}