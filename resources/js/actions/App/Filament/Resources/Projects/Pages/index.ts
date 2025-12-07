import ListProjects from './ListProjects'
import CreateProject from './CreateProject'
import EditProject from './EditProject'

const Pages = {
    ListProjects: Object.assign(ListProjects, ListProjects),
    CreateProject: Object.assign(CreateProject, CreateProject),
    EditProject: Object.assign(EditProject, EditProject),
}

export default Pages