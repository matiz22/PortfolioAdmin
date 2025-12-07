import ListTechnologies from './ListTechnologies'
import CreateTechnology from './CreateTechnology'
import EditTechnology from './EditTechnology'

const Pages = {
    ListTechnologies: Object.assign(ListTechnologies, ListTechnologies),
    CreateTechnology: Object.assign(CreateTechnology, CreateTechnology),
    EditTechnology: Object.assign(EditTechnology, EditTechnology),
}

export default Pages